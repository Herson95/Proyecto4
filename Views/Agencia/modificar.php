<input type="hidden" name="" v-model="ClickedAgencia.id" require placeholder="Codigo"/><br />
    <input type="text" name="" v-model="ClickedAgencia.Codigo" require placeholder="Codigo"/><br />
    <input type="text" name="" v-model="ClickedAgencia.Direccion" require placeholder="Direccion"/><br /><br />
    <input type="text" name="" v-model="ClickedAgencia.Telefono" require placeholder="Telefono"/><br />
    <button type="button" class="boton" @click="Actualizar()">Actualizar</button>
    <button type="button" class="boton" @click="Mostrar_Actualizar=false;Mostrar_Guardar=true">Cancelar</button>