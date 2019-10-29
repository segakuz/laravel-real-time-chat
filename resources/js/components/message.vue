<template>
    <div>
        <li class="list-group-item" :class="className"><slot></slot>
        <span class="time ml-1">{{ time }}</span></li>
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
                return 'list-group-item-' + this.color
            },
            badgeClass(){
                return 'badge-' + this.color;
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
        color: #000000;
    }
</style>
