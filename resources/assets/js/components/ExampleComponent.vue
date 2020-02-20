<template>
  <v-container>
    <v-row>
      <v-col>
        <v-card class="mx-auto">
          <v-card-text>
            <p class="text--primary">Hello Hello Vuetify World!!{{ test }}</p>
          </v-card-text>
          <v-divider></v-divider>
          <v-card-actions>
            <v-btn>Hello！！</v-btn>
          </v-card-actions>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  props: {
    test: String
  }
};
</script>
