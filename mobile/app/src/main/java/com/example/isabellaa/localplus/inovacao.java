package com.example.isabellaa.localplus;

import android.app.AlertDialog;
import android.content.ContentValues;
import android.database.Cursor;
import android.database.SQLException;
import android.database.sqlite.SQLiteDatabase;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.Toast;

import com.example.isabellaa.localplus.entidade.Terceiros;
import com.example.isabellaa.localplus.persistência.Banco;

import java.util.LinkedList;
import java.util.List;

public class inovacao extends AppCompatActivity {
    private Terceiros terceiro;
    private EditText nomeT;
    private EditText rgT;
    private EditText enderecoT;
    private EditText cpfT;
    private EditText placaV;
    private EditText nomeV;
    private EditText modeloV;
    private EditText seguroV;
    private EditText locacaoV;
    private EditText corV;
    private EditText locadoV;
    private EditText marcaV;
    private SQLiteDatabase conexao;
    private Banco bd;

    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_inovacao);
        nomeT= findViewById(R.id.etNomeT);
        rgT=findViewById(R.id.etRgT);
        enderecoT=findViewById(R.id.etEnderecoT);
        cpfT=findViewById(R.id.etCpfT);
        placaV= findViewById(R.id.etPlacaV);
        nomeV=findViewById(R.id.etNomeV);
        modeloV= findViewById(R.id.etModeloV);
        seguroV= findViewById(R.id.etSeguroV);
        locacaoV = findViewById(R.id.etLocacaoV);
        corV = findViewById(R.id.etCorV);
        locadoV = findViewById(R.id.etLocadoV);
        marcaV = findViewById(R.id.etMarcaV);
    }
    public void inserirTerceiro(View view){
        terceiro = new Terceiros();
        terceiro.setNomeT(nomeT.getText().toString());
        terceiro.setRgT(rgT.getText().toString());
        terceiro.setEnderecoT(enderecoT.getText().toString());
        terceiro.setCpfT(cpfT.getText().toString());
        terceiro.setPlacaV(placaV.getText().toString());
        terceiro.setNomeV(nomeV.getText().toString());
        terceiro.setModeloV(modeloV.getText().toString());
        terceiro.setSeguroV(seguroV.getText().toString());
        terceiro.setLocacaoV(locacaoV.getText().toString());
        terceiro.setCorV(corV.getText().toString());
        terceiro.setLocadoV(locadoV.getText().toString());
        terceiro.setMarcaV(marcaV.getText().toString());
        inserirBanco();
        finish();
        }
    private void inserirBanco(){
        bd = new Banco(this);
        try {
            conexao=bd.getWritableDatabase();
            ContentValues values= new ContentValues();
            values.put("NOMET",terceiro.getNomeT());
            values.put("RGT",terceiro.getRgT());
            values.put("ENDERECOT", terceiro.getEnderecoT());
            values.put("CPFT",terceiro.getCpfT());
            values.put("PLACAV",terceiro.getPlacaV());
            values.put("NOMEV", terceiro.getNomeV());
            values.put("MODELOV",terceiro.getModeloV());
            values.put("SEGUROV",terceiro.getSeguroV());
            values.put("LOCACAOV",terceiro.getLocacaoV());
            values.put("CORV",terceiro.getCorV());
            values.put("LOCADOV",terceiro.getLocadoV());
            values.put("MARCAV",terceiro.getMarcaV());
            if(terceiro.getId()==null)
                conexao.insertOrThrow("TERCEIROS",null,values);
            else
                conexao.update("TERCEIROS",values,"ID=?",new String[]{terceiro.getId()+""});
            conexao.close();
            Toast.makeText(this, "Inserido com sucesso",Toast.LENGTH_LONG).show();
        } catch (SQLException ex){
            Toast.makeText(this, "Erro",Toast.LENGTH_LONG).show();
        }
    }
}


