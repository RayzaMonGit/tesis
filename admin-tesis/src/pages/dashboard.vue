<template>
  <div class="dashboard">
    <h1>Dashboard</h1>
    <div class="card">
      <h2>Convocatoria: {{ convocatoria.nombre }}</h2>
      <p>Cantidad de postulaciones: <strong>{{ convocatoria.postulaciones }}</strong></p>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Dashboard',
  data() {
    return {
      convocatoria: {
        nombre: 'Convocatoria 2024',
        postulaciones: 0,
      },
    };
  },
  mounted() {
    // Simulación de llamada a API para obtener la cantidad de postulaciones
    setTimeout(() => {
      // Supón que recibes este dato de una API
      this.convocatoria.postulaciones = 42;
    }, 1000);
  },
};
</script>

<style scoped>
.dashboard {
  max-width: 400px;
  margin: 40px auto;
  font-family: Arial, sans-serif;
}/*
.card {
  background: #f8f9fa;
  padding: 24px;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
  text-align: center;
}*/
</style>