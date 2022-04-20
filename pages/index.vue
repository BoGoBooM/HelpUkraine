<template>
<div>
  <Header></Header>
  <First></First>
  <Second></Second>
  <Third></Third>
  <Fourth></Fourth>
  <Fifth></Fifth>
  <Sixth></Sixth>
  <Footer></Footer>
</div>
</template>

<script>
import Header from "~/components/Header.vue";
import First from "~/components/First.vue";
import Second from "~/components/Second.vue";
import Third from "~/components/Third.vue";
import Fourth from "~/components/Fourth.vue";
import Fifth from "~/components/Fifth.vue";
import Sixth from "~/components/Sixth.vue";
import Footer from "~/components/Footer.vue";
export default {

  components: {
    Header,
    First,
    Second,
    Third,
    Fourth,
    Fifth,
    Sixth,
    Footer
  }
  // name: 'IndexPage'
}
</script>

<style lang="scss" scoped>


</style>