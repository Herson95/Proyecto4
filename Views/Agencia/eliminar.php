<div class="modal" id="deleteModal" v-if="MostrarModal">
	<div class="modalContainer">
		<div class="modalHeading">
			<p class="fleft">¿Estas seguro?</p>
			<button class="fright close" @click="MostrarModal = false;">x</button>
			<div class="clear"></div>
		</div>
		<div class="modalContent">
			<p>Se eliminara este registro {{ClickedAgencia.Codigo}} {{ClickedAgencia.Direccion}}.</p>
			<br><br><br><br><br>
			<button @click="MostrarModal = false; Eliminar()">Si</button>
			<button @click="MostrarModal = false;">No</button>
		</div>
	</div>
</div>