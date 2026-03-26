<template>
  <div class="tab-content">
    <div class="tab-item">
      <div style="cursor:pointer;" class="list-item" v-for="(blog) in blogData" v-bind:key="blog.postID" v-on:click="blogDetails(blog.slug), moveUp()">
        <img src="frontend/images/blog/angle 41.png" alt="">
        <div class="ttr">
          <p>{{blog.date}}</p>
          <h6>{{blog.title}}</h6>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { defineComponent } from 'vue';

export default defineComponent({
  name: 'RecentPage',
  props: {
    blogData: {
      type: Array,
      default: () => []
    }
  },
  methods: {
    blogDetails(val) {
      if(!val) return;
      this.$router.push({ name: "blog-details", params: { slug: val } });
    },
    moveUp() {
      window.scrollTo(0, 0);
    },
  }
});
</script>
