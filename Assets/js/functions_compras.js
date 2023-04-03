//Sirve para el código de barra
document.write(`<script src="${base_url}/Assets/js/plugins/JsBarcode.all.min.js"></script>`);
let tableCompras;

//se encarga de detectar el evento de foco en cualquier elemento del documento HTML
$(document).on('focusin', function (e) {
    if ($(e.target).closest(".tox-dialog").length) {
        e.stopImmediatePropagation();
    }
});

//MUESTRA LA TABLA DE DATOS, inicializa una tabla HTML utilizando jQuery DataTables,
tableCompras = $('#tableCompras').dataTable({
    "aProcessing": true,
    "aServerSide": true,
    "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
    },
    "ajax": {
        "url": " " + base_url + "/Compras/getCompras", // especifica la fuente de datos de la tabla y el método para obtenerlos
        "dataSrc": ""
    },
    "columns": [
        { "data": "fecha" },
        { "data": "proveedor" },
        { "data": "total", 'className': "textright" },
        { "data": "acciones", 'className': "textcenter" }
    ],
    "columnDefs": [
        { 'className': "textright", "targets": [2] },
        { 'className': "textcenter", "targets": [3] }
    ],

    'dom': 'lBfrtip',   /* mostrar diferentes elementos en la interfaz */
   /*  BOTON DE COPIAR */
    'buttons': [
        {
            "extend": "copyHtml5",
            "text": "<i class='far fa-copy'></i> Copiar",
            "titleAttr": "Copiar",
            "className": "btn btn-secondary",
            "exportOptions": {
                "columns": [0, 1, 2, 3]
            }
 
        }, 
        /*  BOTON DE EXCELL */
        {
            "extend": "excelHtml5",
            "text": "<i class='fas fa-file-excel'></i> Excel",
            "titleAttr": "Esportar a Excel",
            "className": "btn btn-success",
            "exportOptions": {
                "columns": [0, 1, 2, 3]
            }
        }, 
        /*  BOTON DE PDF*/
        {
            "extend": "pdfHtml5",
            "text": "<i class='fas fa-file-pdf'></i> PDF",
            "titleAttr": "Esportar a PDF",
            "className": "btn btn-danger",
            "exportOptions": {
                "columns": [0, 1, 2, 3]
            }
        }, 
        /*  BOTON DE CSV */
        {
            "extend": "csvHtml5",
            "text": "<i class='fas fa-file-csv'></i> CSV",
            "titleAttr": "Esportar a CSV",
            "className": "btn btn-info",
            "exportOptions": {
                "columns": [0, 1, 2, 3]
            }
        }
    ],
    "responsive": "true",
    "bDestroy": true,
    "iDisplayLength": 10,
    "order": [[0, "asc"]]
});