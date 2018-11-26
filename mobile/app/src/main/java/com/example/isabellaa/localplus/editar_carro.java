package com.example.isabellaa.localplus;

import android.annotation.SuppressLint;
import android.content.ContentValues;
import android.content.Intent;
import android.database.SQLException;
import android.database.sqlite.SQLiteDatabase;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Switch;
import android.widget.Toast;
import com.example.isabellaa.localplus.persistência.Banco;

public class editar_carro extends AppCompatActivity {
//declaracao
    Banco bd;
    private SQLiteDatabase conexao;
    private EditText placa;
    private EditText nome;
    private EditText marca;
    private EditText modelo;
    private EditText valordoseguro;
    private EditText valordalocacao;
    private EditText cor;
    private Switch ativo;


    @SuppressLint("WrongConstant")
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_editar_carro);
        conexaoBD();
//passando pelo id
        final Intent it = getIntent();
        placa = findViewById(R.id.editTextPlacaCarro);
        nome = findViewById(R.id.editTextNomeCarro);
        marca = findViewById(R.id.editTextMarcaCarro);
        modelo = findViewById(R.id.editTextModeloCarro);
        valordoseguro = findViewById(R.id.editTextValorDoSeguroCarro);
        valordalocacao = findViewById(R.id.editTextValorDaLocacaoCarro);
        cor = findViewById(R.id.editTextCor);
       // ativo n sei fazer xd  ativo = findViewById(R.id.editT);

        placa.setText(it.getStringExtra("PLACA"));
        nome.setText(it.getStringExtra("NOME"));
        marca.setText(it.getStringExtra("MARCA"));
        modelo.setText(it.getStringExtra("MODELO"));
        valordoseguro.setText(it.getStringExtra("VALORDOSEGURO"));
        valordalocacao.setText(it.getStringExtra("VALORDALOCACAO"));
        cor.setText(it.getStringExtra("COR"));
       // ativo.setText(it.getStringExtra("ATIVO"));

//tentando implementar o botaoSalvar pelo id ...

        Button buttonSalvarEditar = (Button) findViewById(R.id.buttonSalvarEditar);
        buttonSalvarEditar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                conexao = bd.getWritableDatabase();
            ContentValues values = new ContentValues();
            values.put("PLACA", placa.getText().toString());
            values.put("NOME", nome.getText().toString());
            values.put("MARCA", marca.getText().toString());
            values.put("MODELO", modelo.getText().toString());
            values.put("VALORDOSEGURO", valordoseguro.getText().toString());
            values.put("VALORDALOCACAO", valordalocacao.getText().toString());
            values.put("ATIVO", ativo.getText().toString());
            values.put("COR", cor.getText().toString());

            if (conexao.update("CARRO", values, "ID = ?", new String[]{String.valueOf(it.getIntExtra("ID",0))}) > 0) {
                conexao.close();
                Toast.makeText(getBaseContext(), "atualizado com sucesso!!!", Toast.LENGTH_SHORT).show();
                finish();
            } else
                Toast.makeText(getBaseContext(), "Erro", Toast.LENGTH_SHORT).show();
        }

        });

    }
    //estabelecendo conexao

    private void conexaoBD() {
        try {
            bd = new Banco(this);
            Toast.makeText(this, "Conexão Ok!", Toast.LENGTH_SHORT).show();
        }catch (SQLException e){
            AlertDialog.Builder msg = new AlertDialog.Builder(this);
            msg.setTitle("Erro");
            msg.setMessage("Erro no banco");
            msg.setNegativeButton("Ok",null);
            msg.show();
        }
    }
    //fechando a tela pelo botao Sair
    private void buttonSairEditar(){
        finish();
    }


}
