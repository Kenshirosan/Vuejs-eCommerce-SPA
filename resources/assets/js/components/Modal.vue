<template>
    <div class="modal is-active">
            <div class="modal-close is-large" aria-label="close" @click="$emit('close')">x</div>
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="box">
                    <slot></slot>
                </div>
            </div>
        </div>
</template>

<script>
    export default{

    }
</script>
<style>

</style>