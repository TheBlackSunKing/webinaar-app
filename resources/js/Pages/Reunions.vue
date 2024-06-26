<script setup>
    
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head, } from '@inertiajs/vue3';
    import { ref, onMounted, reactive} from 'vue';
    const styleObject = reactive({
        color: 'red',
        fontSize: '16px'
        //border: '1px solid black'
    })
    const boxObject = reactive({
        table_layout: 'fixed',
        width: '500px',
        border: '1px solid black',
        padding: '10px'
    })
    const marginObject= reactive({
        margin: '10px',
        border: '1px solid black',
        padding: '10px'
    })

    const reunions = ref([])
    const getreunions = () => { 
        axios.get('reunions/index')
        .then(res => reunions.value  = res.data)
        .catch(error => console.log(error))
    }
    onMounted(()=>getreunions())
    
</script>

<template>
    <Head title="Reuniones" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Reuniones</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">Lista de reuniones</div>

                </div>
            </div>
            <section :style="boxObject" v-for="item in reunions">
                <table >
                    <tr>
                        <div :style="styleObject">* {{item.name}}</div>
                    </tr>
                    <tr>
                        <div :style="marginObject"> {{item.description}} </div>
                    </tr>
                    <tr>
                        
                        <div :style="marginObject">Ocurrira en:  {{item.estimate_time}} </div>
                    </tr>
                </table>
            </section>
        </div>
    </AuthenticatedLayout>
</template>


