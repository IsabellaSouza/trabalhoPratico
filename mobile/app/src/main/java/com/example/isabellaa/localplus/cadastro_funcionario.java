package com.example.isabellaa.localplus;

import android.content.ContentValues;
import android.content.Intent;
import android.database.SQLException;
import android.database.sqlite.SQLiteDatabase;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.View;
import android.widget.EditText;
import android.widget.Switch;
import android.widget.Toast;

import com.example.isabellaa.localplus.entidade.Carro;
import com.example.isabellaa.localplus.entidade.Funcionario;
import com.example.isabellaa.localplus.persistência.Banco;

import java.util.Date;

public class cadastro_funcionario extends AppCompatActivity {

    private Funcionario funcionario;
    private EditText nome;
    private EditText rg;
    private EditText cpf;
    private EditText endereco;
    private EditText datadeadmissao;
    private EditText datadedemissao;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cadastro_funcionario);
        nome= findViewById(R.id.editTextNomeFuncionario);
        rg= findViewById(R.id.editTextRGFuncionario);
        cpf = findViewById(R.id.editTextCPFFuncionario);
        endereco = findViewById(R.id.editTextEnderecoFuncionario);
        datadeadmissao = findViewById(R.id.editTextDataAdmissaoFuncionario);
        datadedemissao = findViewById(R.id.editTextDataDemissao);


        funcionario = (Funcionario) getIntent().getSerializableExtra("funcionario");
        if(funcionario!=null){

            nome.setText(funcionario.getNome());
            rg.setText(funcionario.getRg());
            cpf.setText(funcionario.getCpf());
            endereco.setText( funcionario.getEndereco()+"");
            datadeadmissao.setText(funcionario.getDatadeDemissao()+"");
        }
    }
    public void buttonSalvarFuncionario(View view){
        if (valida()){
            if (funcionario == null) funcionario = new Funcionario();
            funcionario.setNome(nome.getText().toString());
            funcionario.setRg(rg.getText().toString());
            funcionario.setCpf(cpf.getText().toString());
            funcionario.setEndereco(endereco.getText().toString());
            funcionario.setDataDeAdmissao(datadeadmissao.getText().toString());
            funcionario.setDatadeDemissao(datadedemissao.getText().toString());
            inserir();
            finish();
        }}

    private boolean valida() {
        if(TextUtils.isEmpty(nome.getText())){
            Toast.makeText(this,"Entre com o Nome!",Toast.LENGTH_LONG).show();
            nome.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(rg.getText())){
            Toast.makeText(this,"Entre com o RG!",Toast.LENGTH_LONG).show();
            rg.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(cpf.getText())){
            Toast.makeText(this,"Entre com a CPF!",Toast.LENGTH_LONG).show();
            cpf.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(endereco.getText())){
            Toast.makeText(this,"Entre com o ENDERECO!",Toast.LENGTH_LONG).show();
            endereco.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(datadeadmissao.getText())){
            Toast.makeText(this,"Entre com a DATA DA ADMISSÃO!",Toast.LENGTH_LONG).show();
            datadeadmissao.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(datadedemissao.getText())){
            Toast.makeText(this,"Entre com a DATA DE DEMISSÃO!",Toast.LENGTH_LONG).show();
            datadedemissao.requestFocus();
            return false;
        }

        return true;
    }

    private SQLiteDatabase conexao;
    private Banco bd;
    private void inserir(){
        bd = new Banco(this);

        String sql= "INSERT INTO FUNCIONARIO(NOME,RG,CPF,ENDERECO,DATADEADMISSAO,DATADEDEMISSAO)VALUES('"+funcionario.getNome()+"'," +
                "'"+funcionario.getRg()+"',"+funcionario.getCpf()+"',"+funcionario.getEndereco()+"',"+funcionario.getDataDeAdmissao()+"',"+funcionario.getDatadeDemissao()+"')";
        try {
            conexao = bd.getWritableDatabase();
            ContentValues values= new ContentValues();
            values.put("NOME",funcionario.getNome());
            values.put("RG",funcionario.getRg());
            values.put("CPF",funcionario.getCpf());
            values.put("ENDERECO",funcionario.getEndereco());
            values.put("DATADEADMISSAO",funcionario.getDataDeAdmissao());
            values.put("DATADEDEMISSAO",funcionario.getDatadeDemissao());

            if(funcionario.getId()<=0)
                conexao.insertOrThrow("FUNCIONARIO",null,values);
            else
                conexao.update("FUNCIONARIO",values,"ID=?",new String[]{funcionario.getId()+""});
            conexao.close();
            Toast.makeText(this, "Sucesso",Toast.LENGTH_LONG).show();
        }catch (SQLException ex){
            Toast.makeText(this, "Erro na inserção!", Toast.LENGTH_SHORT).show();
        }
    }

public void SairCadastroFuncionario(View view){

        finish();
}

}
