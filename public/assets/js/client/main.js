import { formatRupiah } from "../helper.js";

const RENDER_EVENT = "render_client_dashboard";

function renderPembayaranCard(res) {
  const obj = JSON.parse(res);
  $("#anggaran").html(formatRupiah(obj.anggaran));
  $("#terbayar").html(formatRupiah(obj.terbayar));
  $("#kekurangan").html(formatRupiah(obj.kekurangan));
}

function renderProyekCard(res) {
  const obj = JSON.parse(res);
  $("#tglMulai").html(obj.tgl_mulai);
  $("#tglAkhir").html(obj.tgl_akhir);
  $("#sisa").html(obj.sisa);
  $("#lokasi").html(obj.lokasi);
}

$.ajax({
  url: "/action/pembayaran/card",
  method: "POST",
  data: {
    id_proyek: $("#proyekFilter").val(),
  },
  success: function (res) {
    renderPembayaranCard(res);
  },
});

$.ajax({
  url: "/action/proyek/card",
  method: "POST",
  data: {
    id_proyek: $("#proyekFilter").val(),
  },
  success: function (res) {
    renderProyekCard(res);
  },
});

$("#proyekFilter").on("change", function () {
  document.dispatchEvent(new Event(RENDER_EVENT));
});

document.addEventListener(RENDER_EVENT, function () {
  const idProyek = $("#proyekFilter").val();

  $.ajax({
    url: "/action/pembayaran/card",
    method: "POST",
    data: {
      id_proyek: idProyek,
    },
    success: function (res) {
      renderPembayaranCard(res);
    },
  });

  $.ajax({
    url: "/action/proyek/card",
    method: "POST",
    data: {
      id_proyek: idProyek,
    },
    success: function (res) {
      renderProyekCard(res);
    },
  });
});
