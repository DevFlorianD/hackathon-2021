<template>
    <div class="tag" :style="style">
        {{ type.type }}    
    </div>
</template>

<script>
export default {
    props: ['type'],

    data() {
        return {
            style: ''
        }
    },
    created() {
        this.style = 'background-color: ' + this.type.color;
    }
}
</script>

<style scoped>
.tag {
    padding: 1px 5px;
    border-radius: 50px;
    font-size: 0.7em;
    margin: 2px 8px;
}
</style>