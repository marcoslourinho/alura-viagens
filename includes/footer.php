<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/selectFx.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/superfish.js"></script>
<script src="assets/js/classie.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

<script>
    $("#telefone").mask("(##) #####-####");
    $("#cep").mask("##.###-###");

    $("#cep").blur(function() {
        var cep = $(this).val().replace(/\D/g, '');
        if (cep != "") {
            var validacep = /^[0-9]{8}$/;
            $("#endereco").val("...");
            $("#bairro").val("...");
            $("#cidade").val("...");
            $("#uf").val("...");
            $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(data) {
                if (!("erro" in data)) {
                    $("#endereco").val(data.logradouro);
                    $("#bairro").val(data.bairro);
                    $("#uf").val(data.uf);
                    $("#cidade").val(data.localidade);
                    $("#numero").focus();
                } else {
                    alert("CEP não encontrado.");
                }
            });
        }
    });

    $("#cpf_cnpj").keydown(function() {
        try {
            $("#cpf_cnpj").unmask();
        } catch (e) {}

        var tamanho = $("#cpf_cnpj").val().length;

        if (tamanho < 11) {
            $("#cpf_cnpj").mask("999.999.999-99");
        } else if (tamanho >= 11) {
            $("#cpf_cnpj").mask("99.999.999/9999-99");
        }

        // ajustando foco
        var elem = this;
        setTimeout(function() {
            // mudo a posição do seletor
            elem.selectionStart = elem.selectionEnd = 10000;
        }, 0);
        // reaplico o valor para mudar o foco
        var currentValue = $(this).val();
        $(this).val('');
        $(this).val(currentValue);
    });
</script>
</body>

</html>