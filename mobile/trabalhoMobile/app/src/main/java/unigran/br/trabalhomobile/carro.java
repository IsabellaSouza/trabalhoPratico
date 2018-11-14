package unigran.br.trabalhomobile;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.Switch;

import unigran.br.trabalhomobile.entidade.entidade_carro;

public class carro extends AppCompatActivity {

   EditText nome;
   EditText placa;
   EditText marca;
   EditText modelo;
   EditText valorDoSeguro;
   EditText valorDaLocacao;
   EditText cor;
   Switch ativo;



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_carro);
        nome=findViewById(R.id.editTextNome);
        placa=findViewById(R.id.editTextPlaca);
        marca=findViewById(R.id.editTextMarca);
        modelo=findViewById(R.id.editTextModelo);
        valorDoSeguro=findViewById(R.id.editTextValorDoSeguro);
        valorDaLocacao=findViewById(R.id.editTextValorDaLocacao);
        cor=findViewById(R.id.editTextCor);
        ativo = findViewById(R.id.switchAtivo);


    }

void Salvar(View view){

        entidade_carro carro=new entidade_carro();
        carro.setNome(nome.getText().toString());
        carro.setPlaca(placa.getText().toString());
        carro.setMarca(marca.getText().toString());
        carro.setModelo(modelo.getText().toString());
        carro.setValorDoSeguro(Float.parseFloat(valorDoSeguro.getText().toString()));
        carro.setValorDaLocacao(Float.parseFloat(valorDaLocacao.getText().toString()));
        carro.setCor(cor.getText().toString());
        carro.setAtivo(ativo.isChecked());

    Intent it = new Intent(this,tabelaCarro.class);
    startActivity(it);
}

void Cancelar(View view){
        finish();
}


}
