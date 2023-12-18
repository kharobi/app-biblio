@section('title')
@section('description')
@extends('layout.app')
@section('content')

<div id="pdf-viewer"></div>

<script src="https://github.com/mozilla/pdf.js"></script>
    <script>
        var container = document.getElementById('pdf-viewer');

        // Affiche le PDF si le lien est fourni dans la requête
        @if(isset($pdfLink))
            var pdfLink = '{{ $pdfLink }}';
            pdfjsLib.getDocument(pdfLink).promise.then(function(pdf) {
                pdf.getPage(1).then(function(page) {
                    var viewport = page.getViewport({ scale: 1.5 });
                    var canvas = document.createElement('canvas');
                    var context = canvas.getContext('2d');
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    var renderContext = {
                        canvasContext: context,
                        viewport: viewport
                    };

                    page.render(renderContext);
                    container.appendChild(canvas);
                });
            });
        @endif
    </script>
@endsection