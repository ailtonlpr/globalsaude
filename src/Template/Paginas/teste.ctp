<!-- Declaração do formulário -->  
<form method="post" target="pagseguro" action="https://pagseguro.uol.com.br/v2/checkout/payment.html?transaction_id=E339E025DFDF4E3BB4E40F8AC989118C">  
          
        <!-- Campos obrigatórios -->  
        <input name="receiverEmail" type="hidden" value="apispe@gmail.com">  
        <input name="currency" type="hidden" value="BRL">  
  
        <!-- Itens do pagamento (ao menos um item é obrigatório) -->  
        <input name="itemId1" type="hidden" value="0001">  
        <input name="itemDescription1" type="hidden" value="PLANO SIGMA">  
        <input name="itemAmount1" type="hidden" value="492.96">  
        <input name="itemQuantity1" type="hidden" value="5">  
  
        <!-- Código de referência do pagamento no seu sistema (opcional) -->  
        <input name="reference" type="hidden" value="REF1234">  
          
        <!-- Informações de frete (opcionais) -->  
        <input name="shippingType" type="hidden" value="1">  
        <input name="shippingAddressPostalCode" type="hidden" value="06824060">  
        <input name="shippingAddressStreet" type="hidden" value="Rua Iguape">  
        <input name="shippingAddressNumber" type="hidden" value="140">  
        <input name="shippingAddressComplement" type="hidden" value="Casa 1">  
        <input name="shippingAddressDistrict" type="hidden" value="Jardim Dom Jose">  
        <input name="shippingAddressCity" type="hidden" value="Sao Paulo">  
        <input name="shippingAddressState" type="hidden" value="SP">  
        <input name="shippingAddressCountry" type="hidden" value="BRA">  
  
        <!-- Dados do comprador (opcionais) -->  
        <!-- <input name="senderName" type="hidden" value="José Comprador">  
        <input name="senderAreaCode" type="hidden" value="11">  
        <input name="senderPhone" type="hidden" value="56273440">  
        <input name="senderEmail" type="hidden" value="comprador@uol.com.br">  --> 
  
        <!-- submit do form (obrigatório) -->  
        <input alt="Pague com PagSeguro" name="submit"  type="image"  
src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/120x53-pagar.gif"/>  
          
</form> 