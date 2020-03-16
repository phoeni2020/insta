<template>
    <div>
        <button class="ml-4 btn btn-primary" @click="followuser">Follow</button>
    </div>
</template>

<script>
    export default {
        props: ['userid'],
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            followuser() {
                axios.post ('/follow/'+ this.userid ).then(
                    response=>{alert(response.data)}
                );
            }
        }
    }

</script>
