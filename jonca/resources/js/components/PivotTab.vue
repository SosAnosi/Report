<template>
    <div id="table">
        <table class="table table-bordered table-sm">
            <thead class="text-white">
                <tr class="head-bleu" v-if="repvis">
                    <th class="col"></th>
                    <th colspan="9" > ANNEE </th>
                    <th colspan="2">{{ anprc }} VS {{ ancrs }}</th>
                </tr>
                <tr class="head-vert">
                    <th scope="col">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ tableh }}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li v-for="item in jsondata">
                                    <input class="checkbox" type="checkbox" :value="item[depart]" v-model="departement" />
                                    <label>{{ item[depart] }} </label>
                                </li>
                            </ul>
                        </div>
                    </th>
                    <th class="headtab" scope="col" v-for="item in tabdonn">{{ item }}</th>
                    <th class="ar" v-if="repvis">En Ar</th>
                    <th class="prc" v-if="repvis">En %</th>
                    <th class="tot" v-if="totv">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in updateList">
                    <th scope="row" class="col">{{ item[depart] }}  {{ item.Totalh }}</th>
                    <td class="body" v-for="an in tabdonn" >
                        <span v-if="item[an] != undefined">{{ item[an] | currency  }}</span>
                        <span v-else>0</span>
                        
                    </td>
                    <td class="body" v-if="repvis" :class="item.AR < 0 ? 'primary' : 'accent'">{{ item.AR | currency }}</td>
                    <td  v-if="repvis" :class="item.percent < 0 ? 'primary' : 'accent'">{{ item.percent }}%</td>
                    <td class="body" v-if="totv" >{{ item.Totalv | currency }}</td>
                </tr>
            </tbody>
        </table>

    </div>
</template>
<script>
export default {
    props: [
        'pdata', 'jsondata',
        'depart', 'tableh',
        'anprc', 'ancrs',
        'repvis', 'totv',
        'tabdonn'],
    data() {
        return {
            data: [],
            departement: [],
        }
    },
    computed: {
        updateList() {
            let getd = this.pdata;
            if (this.departement.length === 0) {
                if (getd.length === 0) {
                    return this.jsondata;
                } else {
                    return getd;
                }
            } else {
                return this.jsondata.filter(function (item) {
                    let filtreDep = this.departement.includes(item[this.depart]);
                    return filtreDep;
                }, this);
            }
        },
    },
    filters:{
      currency(value) {
        return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
      }
    },
}
</script>
<style>
.table{
    font-family: Arial;
    font-size: 11px;
    
}
.table .head-bleu {
    text-align: center;
    background-color: #0070C0;
}
.table .head-vert {
    text-align: center;
    background-color: #00B050;  
}

.table .body {
    text-align: right;
    white-space: nowrap;
}
.table .accent {
    background-color: #00B050;
}
.table .primary {
    background-color: red;
}
.col{
    white-space: nowrap;
}
.table .head-vert th{
    padding-bottom: 6px;
}
.table td {
    text-align: center;
    white-space: nowrap;
}

</style>