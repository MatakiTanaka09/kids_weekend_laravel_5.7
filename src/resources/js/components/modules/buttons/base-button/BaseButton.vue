<template>
    <div class="button__container">
        <a class="button">
            {{ buttonName }}
            <!--button-->
        </a>
    </div>
</template>

<script>
    export default {
        props: {
            buttonName: {
                type: [String, Array]
            }
        }
    }
</script>

<style lang="scss" scoped>
    .button__container {
        margin: 8px;
    }
</style>
