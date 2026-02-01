<script setup>
  import { ref, onMounted } from 'vue';

  // defining the reactive state for our data
  const candidates = ref([]);
  const loading = ref(true);

  // fetching data from the Laravel API upon mounting
  onMounted(async () =>
  {
    try
    {
      const response = await fetch('/api/candidates');
      candidates.value = await response.json();
    }
    catch (error)
    {
      console.error('An error occurred whilst fetching data:', error);
    }
    finally
    {
      loading.value = false;
    }
  });
</script>

<template>
  <div class="hextech-interface">
    <header class="interface-header">
      <div class="gold-bar"></div>
      <h1>
        PILTOVER, TERRA, AND OLYMPIA ARCHIVES
      </h1>
      <div class="subtitle">PERSONNEL REGISTRY // CLASS A</div>
    </header>

    <div v-if="loading" class="loading-state">
      <div class="spinner"></div>
      <span>INITIALISING HEXTECH UPLINK...</span>
    </div>

    <div v-else class="grid-container">
      <div 
        v-for="(person, index) in candidates" 
        :key="person.id" 
        class="hex-card"
        :style="{ animationDelay: `${index * 150}ms` }"
      >
        <div class="card-header">
          <span class="id-badge">ID: 00{{ person.id }}</span>
          <div class="status-indicator"></div>
        </div>
        
        <h2 class="candidate-name">
          {{ person.name }}
        </h2>
        
        <div class="candidate-details">
          <div class="detail-row">
            <span class="label">ASSIGNMENT</span>
            <span class="value">{{ person.role }}</span>
          </div>
          <div class="detail-row">
            <span class="label">SPECIALTY</span>
            <span class="value highlight">{{ person.specialty }}</span>
          </div>
        </div>

        <div class="card-footer">
          <button class="action-btn">VIEW DOSSIER</button>
        </div>
      </div>
    </div>
  </div>
</template>