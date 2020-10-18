<template>
    <table class="table">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
        </tr>
        </thead>
        <tbody>
        <tr v-for="branch in branches">
            <td>{{ branch.name }}</td>
            <td>{{ branch.commit }}</td>
        </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: "FrontTable",
    props: [
        'branches'
    ]
}
</script>

<style scoped>

</style>
