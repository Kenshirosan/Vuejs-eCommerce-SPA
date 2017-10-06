<template>
	<div>
		<div class="modal">
			modal
		</div>
	    <modalcomponent v-show="false"></modalcomponent>
    </div>
</template>

<script>
	import ModalComponent from './ModalComponent.vue';
	export default {
		data: {
			showModal: false
		},
		methods: {
			showModal() {
				// this.
			}
		}
	}
</script>