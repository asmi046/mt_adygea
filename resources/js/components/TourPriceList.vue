<template>
    <div class="tour_price tour_price_list">

        <div class="field">
            <label for="tur_date">Дата тура</label>
            <select v-model="selected_data" name="tur_date" id="tur_date">
                <option v-for="(item, key) in props.prices" :key="key" :value="key">
                    {{ key }}
                </option>
            </select>
        </div>

        <div class="field">
            <label for="tur_type">Тип билета</label>
            <select v-model="selected_type" name="tur_type" id="tur_type">
                <option v-for="(item, index) in type_list" :key="index" :value="index">
                    {{ item.type }}
                </option>
            </select>
        </div>

        <div class="price">
            Цена: <strong>{{ selected_price }}</strong> <span class="v">₽</span>
        </div>

        <button @click.prevent="goToPay" class="button">Купить путевку</button>
    </div>
</template>

<script setup>
import { ref, watch } from 'vue';

    const props = defineProps({
        prices: Array,
        title:String,
        img:String,
    })

    let selected_data = ref(Object.keys(props.prices)[0]);
    let type_list = ref(props.prices[Object.keys(props.prices)[0]]);
    let selected_type = ref(0);
    let selected_price = ref(props.prices[Object.keys(props.prices)[0]][0].price);

    watch(selected_data, () => {
        type_list.value = props.prices[selected_data.value]
        selected_type.value = 0
        selected_price.value = props.prices[selected_data.value][0].price
    })

    watch(selected_type, () => {
        selected_price.value = props.prices[selected_data.value][selected_type.value].price
    })

    const goToPay = () => {
        ym(99715695,'reachGoal','to_pay_page')
        const payPage = "https://www.mirturizma46.ru/otpravka-dannyx-na-oplatu/"
        const tourType = "?type=ekskursionka"
        const pid = "&pid=33333"
        const price = "&price="
        const message = "&message="
        const picture = "&pic="
        var msgText = props.title+" "+ selected_data.value+" "+ props.prices[selected_data.value][selected_type.value].type

        let resultPayURL = payPage+tourType+pid+price+ selected_price.value +message+ msgText +picture+props.img

        document.location.href = resultPayURL
    }

</script>
