import { formatRupiah } from "../helper.js";

const RENDER_EVENT = "render_client_pembayaran";

function renderCard(res) {
  const obj = JSON.parse(res);
  $("#anggaran").html(formatRupiah(obj.anggaran));
  $("#terbayar").html(formatRupiah(obj.terbayar));
  $("#kekurangan").html(formatRupiah(obj.kekurangan));
  $("#rabDownload").attr("download", "RAB " + obj.proyek.nama_proyek);
  $("#rabDownload").attr("href", "http://localhost:8080/uploads/rab/" + obj.proyek.rab);
}

let pembayaranTable = $("#pembayaranTable").DataTable({
  ajax: {
    url: "/action/pembayaran/list",
    type: "POST",
    data: function (d) {
      d.id_proyek = $("#proyekFilter").val();
    },
  },
  columns: [
    {
      data: "tgl",
    },
    {
      data: "jumlah",
      render: (data) => {
        return formatRupiah(data);
      },
    },
    {
      data: "ket",
    },
  ],
});

$.ajax({
  url: "/action/pembayaran/card",
  method: "POST",
  data: {
    id_proyek: $("#proyekFilter").val(),
  },
  success: function (res) {
    renderCard(res);
  },
});

$("#proyekFilter").on("change", function () {
  document.dispatchEvent(new Event(RENDER_EVENT));
});

document.addEventListener(RENDER_EVENT, function () {
  const idProyek = $("#proyekFilter").val();
  pembayaranTable.ajax.url("/action/pembayaran/list").load();

  $.ajax({
    url: "/action/pembayaran/card",
    method: "POST",
    data: {
      id_proyek: idProyek,
    },
    success: function (res) {
      renderCard(res);
    },
  });
});
