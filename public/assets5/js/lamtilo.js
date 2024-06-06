function swal(title,text, icon) {
    Swal.fire({
        heightAuto: false,
        icon,
        title: 'Thông báo',
        text: text,
        confirmButtonText: "Tôi đã hiểu!",
    });
}