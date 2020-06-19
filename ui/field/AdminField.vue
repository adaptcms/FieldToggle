<template>
  <Toggle
    :field="field.column_name"
    v-model="selected"
    :customClass="{ 'border-red-500': errors[field.column_name].is, 'border-gray-300': !errors[field.column_name].is }"
  />
</template>

<script>
import Toggle from '@/Adaptcms/Base/ui/components/Form/Toggle'

export default {
  props: [
    'value',
    'field',
    'errors',
    'formMeta',
    'model',
    'module',
    'action'
  ],

  components: {
    Toggle
  },

  watch: {
    value (newVal, oldVal) {
      if (newVal !== oldVal) {
        this.selected = newVal
      }
    },

    selected (newVal, oldVal) {
      if (newVal !== oldVal) {
        this.$emit('input', newVal)
      }
    }
  },

  data () {
    return {
      selected: null
    }
  },

  mounted () {
    if (!this.selected) {
      this.selected = this.value
    }
  }
}
</script>
