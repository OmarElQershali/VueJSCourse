<template>
    <div v-if="field.asHtml" v-html="field.value"></div>
    <span v-else :class="classes" :style="styles">{{ field.value }}</span>
</template>

<script>
export default {
    props: ['field', 'classes', 'styles'],
}
</script>
