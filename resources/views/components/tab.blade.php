@props(['tab'])
<script>
    const triggerTabList = document.querySelectorAll('#nav-tab button')
    triggerTabList.forEach(triggerEl => {
        const tabTrigger = new bootstrap.Tab(triggerEl)

        triggerEl.addEventListener('click', event => {
            event.preventDefault()
            tabTrigger.show()
        })
    })

    const triggerEl = document.querySelector('#nav-tab button[data-bs-target="#{{$tab}}"]')
    //const triggerEl = document.querySelector('#nav-preferences')
    console.log(triggerEl);
    const t = bootstrap.Tab.getInstance(triggerEl)
    console.log(t);
    t.show()
</script>
