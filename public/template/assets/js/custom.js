/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";
//custom menu active
var path = location.pathname.split('/')
var url = location.origin + '/' + path[1]

$('ul.sidebar-menu li a').each(function(){
    if($(this).attr('href').indexOf(url) !== -1){
        $(this).parent().addClass('active').parent().parent('li').addClass('active')
    }
})

// datatables
$(document).ready( function () {
    $('#table1').DataTable();
} );

// model confirm
function submitDel(id){
    $('#del-'+id).submit()
}
function submitRestore(id){
    $('#res-'+id).submit()
}

function returnrestore(){
    var link = $('#restore').attr('href')
    $(location).attr('href', link)
}

function returnLogout(){
    var link = $('#logout').attr('href')
    $(location).attr('href', link)
}

// chart
var ctx = document.getElementById("myChart2").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Dekan", "Direktur", "Kaprodi", "Kepala Bagian", "Kepala Urusan", "Ketua Kelompok Keahlian", "Sekertaris Prodi", "wakil Dekan"],
    datasets: [{
      label: 'Statistics',
      data: [6, 14, 39, 40, 660, 31, 16, 13],
      borderWidth: 2,
      backgroundColor: '#6777ef',
      borderColor: '#6777ef',
      borderWidth: 2.5,
      pointBackgroundColor: '#ffffff',
      pointRadius: 4
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        gridLines: {
          drawBorder: false,
          color: '#f2f2f2',
        },
        ticks: {
          beginAtZero: true,
          stepSize: 100
        }
      }],
      xAxes: [{
        ticks: {
          display: false
        },
        gridLines: {
          display: false
        }
      }]
    },
  }
});
