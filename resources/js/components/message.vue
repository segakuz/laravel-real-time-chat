<template>
    <div class="col-11 mb-3 clearfix" :class="wrapperClass">
        <div class="card mb-1" :class="className">
            <div class="card-body">
                <slot></slot>
                <span class="time ml-1">{{ time }}</span>
            </div>
        </div>
        <small class="badge float-right" :class="badgeClass">{{ user }}</small>
    </div>
</template>

<script>
    export default {
        props: [
            'color',
            'user',
            'time'
        ],
        computed:{
            className(){
                return this.color == "success" ? "text-white bg-primary" : "bg-light";
            },
            badgeClass(){
                return 'badge-' + this.color;
            },
            wrapperClass() {
                return this.color == "success" ? "offset-1" : "";
            },
        },
        mounted() {
            // console.log('Component message mounted.');
        }
    }
</script>

<style>
    .time{
        font-size: 9px;
        margin-top: 10px;
    }
</style>
