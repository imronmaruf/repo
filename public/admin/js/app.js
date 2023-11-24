function showSuccessAlert() {
    Swal.fire({
        title: "Success!",
        text: "Data berhasil disimpan.",
        icon: "success",
        confirmButtonText: "Ok",
    });
}

function showErrorAlert() {
    Swal.fire({
        title: "Error!",
        text: "Terjadi kesalahan saat menyimpan data.",
        icon: "error",
        confirmButtonText: "Ok",
    });
}

function confirmEdit(event) {
    Swal.fire({
        title: "Yakin Update Data?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Ya, Update",
        cancelButtonText: "Batal",
    }).then((result) => {
        if (result.isConfirmed) {
            event.target.submit();
        } else {
            Swal.fire("Dibatalkan", "Data tetap aman :)", "info");
        }
    });
}

function confirmHapus(event) {
    event.preventDefault();

    Swal.fire({
        title: "Yakin Hapus Data?",
        text: "Data yang dihapus tidak dapat dikembalikan!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Hapus",
        cancelButtonText: "Batal",
    }).then((willDelete) => {
        if (willDelete.isConfirmed) {
            event.target.submit();
        } else {
            swal("Your imaginary file is safe!");
        }
    });
}
