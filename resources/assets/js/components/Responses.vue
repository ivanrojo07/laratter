<template>
	<div class="row">
		<a href="#">Ver respuestas</a>
		<div class="card" v-for="response in responses">
			{{ response.message }}
		</div>
	</div>
</template>
<script>
export default {
	props: ['message'],
	data(){
		return{
			responses: [],
		}
	},

	methods: {
		load() {
			axios.get('/api/messages/'+ this.message +'/responses')
				.then(res =>{
					this.responses =res.data;
				});
		}
	}
}
</script>