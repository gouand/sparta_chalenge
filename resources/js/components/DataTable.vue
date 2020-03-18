<template>
    <v-card>
        <v-card-title>
            Помощь нуждающимся
            <v-spacer></v-spacer>
            <input
                :value="search"
                @keyup.enter="search = $event.target.value"
                append-icon="mdi-magnify"
                label="Поиск"
                single-line
                hide-details
            ></input>
        </v-card-title>
        <v-data-table v-if="data"
            :headers="headers"
            :items="data"
            :search="search"
        ></v-data-table>
        <v-data-table v-if="!data" item-key="name" class="elevation-1" loading loading-text="Загрузка...Подождите"></v-data-table>
    </v-card>
</template>

<script type="text/ecmascript-6">
    export default {
        data(){
            return {
                search: '',
                headers: [
                    { text: 'Имя', value: 'name' },
                    { text: 'Адрес', value: 'address' },
                    { text: 'Нужды', value: 'needs' },
                    { text: 'Создано', value: 'created_at' },
                ],
                data: null
            }
        },
        mounted() {
            axios.get('/flashmob/data-table').then(success => {
               // console.log(success.data.data)
                this.data = success.data.data;
            }).catch(error => {
                console.log(error)
            });
        }
    }
</script>
