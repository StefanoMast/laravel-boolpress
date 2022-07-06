<template>
  <div>
    <div class="container text-center mt-4">
      <h2>Questa è la mia app di vue</h2>
      <WorkInProgress/>
    </div>
  </div>
</template>

<script>
import WorkInProgress from '../components/WorkInProgress'

export default {
    name: 'App',
    components: {
      WorkInProgress
    }
};
</script>

<style>

</style>