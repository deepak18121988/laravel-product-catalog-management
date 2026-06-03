<script>

/**
 * Global Success Toast
 */
function showSuccessToast(message)
{
    Swal.fire({
        toast: true,
        position: 'top-end',
        icon: 'success',
        title: message,
        showConfirmButton: false,
        timer: 2500,
        timerProgressBar: true
    });
}

/**
 * Global Error Toast
 */
function showErrorToast(message)
{
    Swal.fire({
        toast: true,
        position: 'top-end',
        icon: 'error',
        title: message,
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true
    });
}

</script>