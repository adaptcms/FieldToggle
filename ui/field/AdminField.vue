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
    'modelValue',
    'field',
    'errors',
    'formMeta',
    'model',
    'action'
  ],

  emits: [
    'update:modelValue'
  ],

  components: {
    Toggle
  },

  watch: {
    modelValue (newVal, oldVal) {
      if (newVal !== 0 && newVal !== oldVal) {
        this.selected = newVal
      }
    },

    selected (newVal, oldVal) {
      if (newVal !== oldVal) {
        this.$emit('update:modelValue', newVal)
      }
    }
  },

  data () {
    return {
      selected: false
    }
  },

  mounted () {
    this.selected = this.modelValue
  }
}
</script>
