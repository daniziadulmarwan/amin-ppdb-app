$(function() {
    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"').attr('content')}
    })
});

// TODO::Chart Jenis Kelamin
function GenderChart() {
  fetch('/Chart').then(res => res.json()).then(data => {
    let man = data.gender.filter(w => w.gender === '1').length;
    let woman = data.gender.filter(w => w.gender === '2').length;
    let series = [Math.round(man / data.gender.length * 100), Math.round(woman / data.gender.length * 100)];
    var options = {
        chart: {
            height: 370,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                dataLabels: {
                    name: {
                        fontSize: '22px',
                    },
                    value: {
                        fontSize: '16px',
                    },
                    total: {
                        show: true,
                        label: 'Total',
                        formatter: function (w) {
                            return data.gender.length;
                        }
                    }
                }
            }
        },
        series: series,
        labels: ['Laki-laki', 'Perempuan'],
        colors: ['#82954B', '#F73D93'],
        
    }
    
    var chart = new ApexCharts(
        document.querySelector("#gender_chart"),
        options
    );
    
    chart.render();
  }).catch(err => console.log(err));
}

// TODO::Chart Hobi
function HobiChart() {
    fetch('/Chart').then(res => res.json()).then(data => {
        let sport = data.hobi.filter(res => res.hobi === 1);
        let art = data.hobi.filter(res => res.hobi === 2);
        let reading = data.hobi.filter(res => res.hobi === 3);
        let writing = data.hobi.filter(res => res.hobi === 4);
        let travel = data.hobi.filter(res => res.hobi === 5);
        let other = data.hobi.filter(res => res.hobi === 6);
        let hobiArr = [sport.length, art.length, reading.length, writing.length, travel.length, other.length];
        let title = ["Olahraga", "Kesenian", "Membaca", "Menulis", "Traveling", "Lainnya"];
        let colors = ["#34c38f", "#556ee6","#f46a6a", "#50a5f1", "#f1b44c", "#8E3200"];

    const options = {
        chart: {
            height: 320,
            type: 'pie',
        }, 
        series: hobiArr,
        labels: title,
        colors: colors,
        legend: {
            show: true,
            position: 'bottom',
            horizontalAlign: 'center',
            verticalAlign: 'middle',
            floating: false,
            fontSize: '14px',
            offsetX: 0,
        },
        responsive: [{
            breakpoint: 600,
            options: {
                chart: {
                    height: 240
                },
                legend: {
                    show: false
                },
            }
        }]
      }
      const chart = new ApexCharts(
        document.querySelector("#hobi_chart"),
        options
      );
      chart.render();
    }).catch(err => console.log(err));

}

// TODO::Chart Cita-cita
function CitaChart() {
    fetch('/Chart').then(res => res.json()).then(data => {
        let pns = data.cita.filter(res => res.cita_cita === 1);
        let tni = data.cita.filter(res => res.cita_cita === 2);
        let dosen = data.cita.filter(res => res.cita_cita === 3);
        let dokter = data.cita.filter(res => res.cita_cita === 4);
        let politik = data.cita.filter(res => res.cita_cita === 5);
        let wiraswasta = data.cita.filter(res => res.cita_cita === 6);
        let artis = data.cita.filter(res => res.cita_cita === 7);
        let ilmuwan = data.cita.filter(res => res.cita_cita === 8);
        let agamawan = data.cita.filter(res => res.cita_cita === 9);
        let other = data.cita.filter(res => res.cita_cita === 10);
        let citaArr = [pns.length, tni.length, dosen.length, dokter.length, politik.length, wiraswasta.length, artis.length, ilmuwan.length, agamawan.length, other.length];
        let title = ["PNS", "TNI/Polri", "Guru/Dosen", "Dokter", "Politikus", "Wiraswasta", "Seniman/Artis", "Ilmuwan", "Agamawan", "Lainnya"];
        let colors = ["#34c38f", "#556ee6","#f46a6a", "#50a5f1", "#f1b44c", "#8E3200", "#7858A6", "#37E2D5", "#F73D93", "#82954B"];

        const options = {
            chart: {
                height: 320,
                type: 'donut',
            }, 
            series: citaArr,
            labels: title,
            colors: colors,
            legend: {
                show: true,
                position: 'bottom',
                horizontalAlign: 'center',
                verticalAlign: 'middle',
                floating: false,
                fontSize: '14px',
                offsetX: 0,
            },
            responsive: [{
                breakpoint: 600,
                options: {
                    chart: {
                        height: 240
                    },
                    legend: {
                        show: false
                    },
                }
            }]
          
          }
          
          const chart = new ApexCharts(
            document.querySelector("#cita_chart"),
            options
          );
          
          chart.render();
    }).catch(err => console.log(err));
}

// TODO::Chart Jenis Kelamin
function FatherJobChart() {
    fetch('/Chart').then(res => res.json()).then(data => {
      let noJob = data.fatherJob.filter(w => w.pekerjaan_ayah === 1).length;
      let buruh = data.fatherJob.filter(w => w.pekerjaan_ayah === 2).length;
      let dokter = data.fatherJob.filter(w => w.pekerjaan_ayah === 3).length;
      let dosen = data.fatherJob.filter(w => w.pekerjaan_ayah === 4).length;
      let sailor = data.fatherJob.filter(w => w.pekerjaan_ayah === 5).length;
      let pedagang = data.fatherJob.filter(w => w.pekerjaan_ayah === 6).length;
      let swasta = data.fatherJob.filter(w => w.pekerjaan_ayah === 7).length;
      let hukum = data.fatherJob.filter(w => w.pekerjaan_ayah === 8).length;
      let farmer = data.fatherJob.filter(w => w.pekerjaan_ayah === 9).length;
      let pns = data.fatherJob.filter(w => w.pekerjaan_ayah === 10).length;

      let fatherJobArr = [noJob,buruh,dokter,dosen,sailor,pedagang,swasta,hukum,farmer,pns];

      let categories = ['Tidak Bekerja', 'Buruh', 'Dokter/Bidan/Perawat', 'Guru/Dosen', 'Nelayan', 'Pedagang', 'Pegawai Swasta', 'Pengacara/Hakim/Jaksa/Notaris', 'Petani/Peternak', 'PNS']
      const options = {
        chart: {
            height: 350,
            type: 'bar',
            toolbar: {
                show: false,
            }
        },
        plotOptions: {
            bar: {
                horizontal: true,
            }
        },
        dataLabels: {
            enabled: false
        },
        series: [{
            data: fatherJobArr,
        }],
        colors: ['#34c38f'],
        grid: {
            borderColor: '#f1f1f1',
        },
        xaxis: {
            categories: categories,
        }
    }
    const chart = new ApexCharts(
        document.querySelector("#father_job_chart"),
        options
    );
    chart.render();
    }).catch(err => console.log(err));
}

// TODO::Chart Jenis Kelamin
function FatherSalaryChart() {
    fetch('/Chart').then(res => res.json()).then(data => {
      let one = data.fatherSalary.filter(w => w.penghasilan_ayah === 1).length;
      let two = data.fatherSalary.filter(w => w.penghasilan_ayah === 2).length;
      let three = data.fatherSalary.filter(w => w.penghasilan_ayah === 3).length;
      let four = data.fatherSalary.filter(w => w.penghasilan_ayah === 4).length;
      let five = data.fatherSalary.filter(w => w.penghasilan_ayah === 5).length;
      let six = data.fatherSalary.filter(w => w.penghasilan_ayah === 6).length;
      let seven = data.fatherSalary.filter(w => w.penghasilan_ayah === 7).length;

      let fatherSalaryArr = [one,two,three,four,five,six,seven];
      let categories = ['< 500.000', '500.000 - 1.000.000', '1.000.001 - 2.000.000', '2.000.001 - 3.000.000', '3.000.001 - 4.000.000', '4.000.001 - 5.000.000', '> 5.000.001'];

      const options = {
        chart: {
            height: 350,
            type: 'bar',
            toolbar: {
                show: false,
            }
        },
        plotOptions: {
            bar: {
                horizontal: true,
            }
        },
        dataLabels: {
            enabled: false
        },
        series: [{
            data: fatherSalaryArr,
        }],
        colors: ['#85586F'],
        grid: {
            borderColor: '#f1f1f1',
        },
        xaxis: {
            categories: categories,
        }
    }
    const chart = new ApexCharts(
        document.querySelector("#father_salary_chart"),
        options
    );
    chart.render();
    }).catch(err => console.log(err));
}

function YearlyChart() {
    fetch('/Chart').then(res => res.json()).then(data => {
        let ma2022 = data.yearly.filter(w => w.jenjang === 1 && w.tahun_ppdb === '2022').length;
        let mts2022 = data.yearly.filter(w => w.jenjang === 2 && w.tahun_ppdb === '2022').length;

        let ma2023 = data.yearly.filter(w => w.jenjang === 1 && w.tahun_ppdb === '2023').length;
        let mts2023 = data.yearly.filter(w => w.jenjang === 2 && w.tahun_ppdb === '2023').length;

        let ma2024 = data.yearly.filter(w => w.jenjang === 1 && w.tahun_ppdb === '2024').length;
        let mts2024 = data.yearly.filter(w => w.jenjang === 2 && w.tahun_ppdb === '2024').length;

        let ma2025 = data.yearly.filter(w => w.jenjang === 1 && w.tahun_ppdb === '2025').length;
        let mts2025 = data.yearly.filter(w => w.jenjang === 2 && w.tahun_ppdb === '2025').length;

        let ma2026 = data.yearly.filter(w => w.jenjang === 1 && w.tahun_ppdb === '2026').length;
        let mts2026 = data.yearly.filter(w => w.jenjang === 2 && w.tahun_ppdb === '2026').length;

        let ma2027 = data.yearly.filter(w => w.jenjang === 1 && w.tahun_ppdb === '2027').length;
        let mts2027 = data.yearly.filter(w => w.jenjang === 2 && w.tahun_ppdb === '2027').length;
        
        let ma2028 = data.yearly.filter(w => w.jenjang === 1 && w.tahun_ppdb === '2028').length;
        let mts2028 = data.yearly.filter(w => w.jenjang === 2 && w.tahun_ppdb === '2028').length;

        let mas = [ma2022 ?? 0, ma2023 ?? 0,ma2024 ?? 0,ma2025 ?? 0,ma2026 ?? 0,ma2027 ?? 0,ma2028 ?? 0];
        let mtss = [mts2022 ?? 0, mts2023 ?? 0,mts2024 ?? 0,mts2025 ?? 0,mts2026 ?? 0,mts2027 ?? 0,mts2028 ?? 0];
        
    const options = {
        chart: {
        height: 380,
        type: 'line',
        zoom: {
            enabled: false
        },
        toolbar: {
            show: false
        }
        },
        colors: ['#556ee6', '#34c38f'],
        dataLabels: {
        enabled: false,
        },
        stroke: {
        width: [3, 3],
        curve: 'straight'
        },
        series: [{
        name: "Madrasah Aliyah",
        data: mas
        },
        {
        name: "Madrasah Tsanawiyah",
        data: mtss
        },
        ],
        title: {
            text: 'Average Registration Pertahun',
            align: 'left',
            style: {
              fontWeight:  '500',
            },
          },
        grid: {
        row: {
            colors: ['transparent', 'transparent'],
            opacity: 0.2
        },
        borderColor: '#f1f1f1'
        },
        markers: {
        style: 'inverted',
        size: 6
        },
        xaxis: {
        categories: ['2022', '2023', '2024', '2025', '2026','2027','2028'],
        title: {
            text: 'Total Pendaftaran Tahun'
        }
        },
        legend: {
        position: 'top',
        horizontalAlign: 'right',
        floating: true,
        offsetY: -25,
        offsetX: -5
        },
        responsive: [{
        breakpoint: 600,
        options: {
            chart: {
            toolbar: {
                show: false
            }
            },
            legend: {
            show: false
            },
        }
        }]
    }
    const chart = new ApexCharts(
        document.querySelector("#year_chart_datalabel"),
        options
    );
    chart.render();

    }).catch(err => console.log(err));
}

// TODO:: Call The Functions
GenderChart();
HobiChart();
CitaChart();
FatherJobChart();
FatherSalaryChart();
YearlyChart();

$('#changePasswordForm').on('submit', function(e) {
    e.preventDefault();

    let pass = $('#password').val();
    let passRpt = $('#repeatPassword').val();

    $.ajax({
        type: 'post',
        url: '/admin/setting/password',
        data: {password:pass,repeatPassword:passRpt},
        success: function(data) {
            if(data.status === false) {
                $.each(data.error, function(prefix, val) {
                    $('div.'+prefix+'-error').text(val[0]);
                });
            } else {
                $('#changePasswordForm')[0].reset();
                $('.alertChange').removeClass('d-none');
                $('.alertChange').text(data.msg);
            }
        }
    });
});