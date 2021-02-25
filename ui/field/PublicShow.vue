<template>
  <div class="text-sm leading-5 font-semibold">
    <span v-if="value" class="text-green-500">
      True
    </span>
    <span v-else class="text-red-500">
      False
    </span>
  </div>
</template>

<script>
export default {
  props: [
    'value',
    'field',
    'model',
    'module',
    'action'
  ]
}
</script>
