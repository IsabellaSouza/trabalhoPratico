package com.example.isabellaa.localplus;

import android.content.ContentValues;
import android.content.Intent;
import android.database.SQLException;
import android.database.sqlite.SQLiteDatabase;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Switch;
import android.widget.Toast;
import com.example.isabellaa.localplus.entidade.Carro;
import com.example.isabellaa.localplus.persistência.Banco;

public class cadastro_carro extends AppCompatActivity {


    private Carro carro;
    private EditText placa;
    private EditText nome;
    private EditText marca;
    private EditText modelo;
    private EditText valordoseguro;
    private EditText valordalocacao;
    private EditText cor;
    private Switch ativo;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cadastro_carro);
        placa = findViewById(R.id.editTextPlacaCarro);
        nome= findViewById(R.id.editTextNomeCarro);
        marca = findViewById(R.id.editTextMarcaCarro);
        modelo = findViewById(R.id.editTextModeloCarro);
        valordoseguro = findViewById(R.id.editTextValorDoSeguroCarro);
        valordalocacao = findViewById(R.id.editTextValorDaLocacaoCarro);
        cor = findViewById(R.id.editTextCor);
        ativo = findViewById(R.id.switchAtivo);

        carro = (Carro) getIntent().getSerializableExtra("carro");
        if(carro!=null){
        placa.setText(carro.getPlaca());
        nome.setText(carro.getNome());
        marca.setText(carro.getMarca());
        modelo.setText(carro.getModelo());
        valordoseguro.setText( carro.getValorDoSeguro()+"");
        valordalocacao.setText( carro.getValorDaLocacao()+"");
        cor.setText(carro.getCor());
        ativo.setSelected(carro.getAtivo());
        }
        }
    public void buttonSalvarCarro(View view){
        if (valida()){
            if (carro == null) carro = new  Carro();
        carro.setNome(nome.getText().toString());
        carro.setPlaca(placa.getText().toString());
        carro.setMarca(marca.getText().toString());
        carro.setModelo(modelo.getText().toString());
        carro.setValorDoSeguro(Float.parseFloat(valordoseguro.getText().toString()));
        carro.setValorDaLocacao(Float.parseFloat(valordalocacao.getText().toString()));
        carro.setCor(cor.getText().toString());
        carro.setAtivo(ativo.isSelected());
        inserir();
        finish();
    }}

    private boolean valida() {
        if(TextUtils.isEmpty(placa.getText())){
            Toast.makeText(this,"Entre com a Placa!",Toast.LENGTH_LONG).show();
            placa.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(nome.getText())){
            Toast.makeText(this,"Entre com o Nome!",Toast.LENGTH_LONG).show();
            nome.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(marca.getText())){
            Toast.makeText(this,"Entre com a Marca!",Toast.LENGTH_LONG).show();
            marca.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(modelo.getText())){
            Toast.makeText(this,"Entre com o Modelo!",Toast.LENGTH_LONG).show();
            modelo.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(valordoseguro.getText())){
            Toast.makeText(this,"Entre com o Valor Do Seguro!",Toast.LENGTH_LONG).show();
            valordoseguro.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(valordalocacao.getText())){
            Toast.makeText(this,"Entre com o Valor Da Locação!",Toast.LENGTH_LONG).show();
            valordalocacao.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(cor.getText())){
            Toast.makeText(this,"Entre com a Cor!",Toast.LENGTH_LONG).show();
            cor.requestFocus();
            return false;
        }

        return true;
    }


    private SQLiteDatabase conexao;
    private Banco bd;
    private void inserir(){
        bd = new Banco(this);

        String sql= "INSERT INTO CARRO(PLACA,NOME,MARCA,MODELO,VALORDOSEGURO,VALORDALOCACAO,COR,ATIVO )VALUES('"+carro.getPlaca()+"'," +
                "'"+carro.getNome()+"',"+carro.getMarca()+"',"+carro.getModelo()+"',"+carro.getValorDoSeguro()+"',"+carro.getValorDaLocacao()+"',"+carro.getCor()+"',"+carro.getAtivo()+")";
        try {
            conexao = bd.getWritableDatabase();
            ContentValues values= new ContentValues();
            values.put("PLACA",carro.getPlaca());
            values.put("NOME",carro.getNome());
            values.put("MARCA",carro.getMarca());
            values.put("MODELO",carro.getModelo());
            values.put("VALORDOSEGURO",carro.getValorDoSeguro());
            values.put("VALORDALOCACAO",carro.getValorDaLocacao());
            values.put("COR",carro.getCor());
            values.put("ATIVO",carro.getAtivo());

            if(carro.getId()<=0)
                conexao.insertOrThrow("CARRO",null,values);
             else
               conexao.update("CARRO",values,"ID=?",new String[]{carro.getId()+""});
           conexao.close();
            Toast.makeText(this, "Sucesso",Toast.LENGTH_LONG).show();
        }catch (SQLException ex){
            Toast.makeText(this, "Erro na inserção!", Toast.LENGTH_SHORT).show();
        }
    }

    public void Cancelar(View view){
        finish();
    }


    }



