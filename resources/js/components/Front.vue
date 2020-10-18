<template>
    <div>
        <h2>API-Table</h2>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Projects</label>
            </div>
            <select  @change="reload()" class="custom-select" id="inputGroupSelect01">
                <option v-for="proj in apidata.projects" :value="proj.id">{{ proj.name }}</option>
            </select>
        </div>
        <front-table :branches="branches"></front-table>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.reload();
            console.log('Component is mounted.');
            console.log('APIDATA: ', this.apidata);
        },

        data: function(){
            return {
                branches: [],
            }
        },

        props: [
            'apidata',
            //'branches'
        ],

        methods: {
            reload() {
                console.log('ID: ', document.getElementById('inputGroupSelect01').value);
                axios.get('/api/branches/' + document.getElementById('inputGroupSelect01').value)
                .then( (response) => {
                console.log('Response API Branches:', response);
                this.branches = response.data.branches;
                })
                .catch(function(error){
                console.log(error);
                });
            },
        },
        name: "Front"
    }
</script>

<style scoped>
</style>
