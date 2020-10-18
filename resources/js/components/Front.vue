<template>
    <div>
        <h2>API-Table</h2>
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                </tr>
            </thead>
            <tbody>
                <tr v-for="proj in apidata.projects">
                    <td>{{ proj.id }}</td>
                    <td>{{ proj.name }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component is mounted.');
            console.log('APIDATA: ', this.apidata);
        },
        props: [
          'apidata'
        ],
        name: "Front"
    }
</script>

<style scoped>
</style>
