@props('tab')
<script>
const triggerEl = document.querySelector('#myTab button[data-bs-target="#{{$tab}}"]')
bootstrap.Tab.getInstance(triggerEl).show()
</script>
