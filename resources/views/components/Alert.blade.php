<!-- resources/views/components/_alert.blade.php -->
@props(['type' => 'success', 'message', 'test'])

<div data-alert {{ $attributes->merge(['class' => 'alert alert-' . $type . ' alert-dismissible fade show']) }} role="alert">
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const alerts = document.querySelectorAll('[data-alert]');

        alerts.forEach(function(alert) {
            window.setTimeout(function() {
                $(alert).alert('close');
            }, 5000);
        });
    });
</script>
