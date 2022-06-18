<head>
  <meta charset="utf-8" />
  <title>AL AMIN PPDB | ADMINISTRATOR</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Penerimaan Peserta Didik Baru" name="description" />
  <meta content="Al Amin Puloerang" name="Zeiteim Tech" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- App favicon -->
  <link rel="shortcut icon" href="/assets/images/favicon.ico">

  <!-- Bootstrap Css -->
  <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <!-- DataTables -->
  <link href="/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <link href="/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

  <style>
    #side-menu .active {
      color: blueviolet !important;
    }
    #side-menu .active i {
      color: blueviolet !important;
    }


    .switch-holder {
    display: flex;
    padding: 10px 20px;
    border-radius: 10px;
    margin-bottom: 30px;
    box-shadow: -8px -8px 15px rgba(255,255,255,.7),
                10px 10px 10px rgba(0,0,0, .3),
                inset 8px 8px 15px rgba(255,255,255,.7),
                inset 10px 10px 10px rgba(0,0,0, .3);
    justify-content: space-between;
    align-items: center;
    background-color: #d1dad3;
}

.switch-label {
    width: 150px;
}

.switch-label i {
    margin-right: 5px;
}

.switch-toggle {
    height: 40px;
}

.switch-toggle input[type="checkbox"] {
    position: absolute;
    opacity: 0;
    z-index: -2;
}

.switch-toggle input[type="checkbox"] + label {
    position: relative;
    display: inline-block;
    width: 100px;
    height: 40px;
    border-radius: 20px;
    margin: 0;
    cursor: pointer;
    box-shadow: inset -8px -8px 15px rgba(255,255,255,.6),
                inset 10px 10px 10px rgba(0,0,0, .25);
    
}

.switch-toggle input[type="checkbox"] + label::before {
    position: absolute;
    content: 'OFF';
    font-size: 13px;
    text-align: center;
    line-height: 25px;
    top: 8px;
    left: 8px;
    width: 45px;
    height: 25px;
    border-radius: 20px;
    background-color: #d1dad3;
    box-shadow: -3px -3px 5px rgba(255,255,255,.5),
                3px 3px 5px rgba(0,0,0, .25);
    transition: .3s ease-in-out;
}

.switch-toggle input[type="checkbox"]:checked + label::before {
    left: 50%;
    content: 'ON';
    color: #fff;
    background-color: #00b33c;
    box-shadow: -3px -3px 5px rgba(255,255,255,.5),
                3px 3px 5px #00b33c;
}

  </style>
</head>