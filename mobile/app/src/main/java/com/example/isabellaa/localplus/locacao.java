package com.example.isabellaa.localplus;

import android.content.ContentValues;
import android.database.SQLException;
import android.database.sqlite.SQLiteDatabase;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.View;
import android.widget.EditText;
import android.widget.Switch;
import android.widget.Toast;

import com.example.isabellaa.localplus.entidade.Locacao;
import com.example.isabellaa.localplus.persistência.Banco;

import java.util.Date;


public class locacao extends AppCompatActivity {

    private Locacao locacao;
    private EditText datalocacao;
    private EditText datadevolucao;
    private EditText quilometragem;
    private EditText cpfpessoa;
    private EditText placaveiculo;
    private Switch ativolocacao;

    public locacao() {
    }


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_locacao);
        datalocacao.findViewById(R.id.editTextDataLocacao);
        datadevolucao.findViewById(R.id.editTextDataDevolucao);
        quilometragem.findViewById(R.id.editTextQuilometragem);
        cpfpessoa.findViewById(R.id.editTextCpfLocacao);
        placaveiculo.findViewById(R.id.editTextVeiculoPlaca);
        ativolocacao.findViewById(R.id.switchAtivoLocacao);

        locacao = (Locacao) getIntent().getSerializableExtra("locacao");
        if (locacao!=null){
            datalocacao.setText((CharSequence) locacao.getdatalocacao());
            datadevolucao.setText((CharSequence) locacao.getdatadevolucao());
            quilometragem.setText((int) locacao.getQuilometragem());
            cpfpessoa.setText(locacao.getcpfpessoa());
            placaveiculo.setText(locacao.getplacaveiculo());
            ativolocacao.setTextIsSelectable(locacao.getativolocacao());
        }

    }

    private boolean valida() {
        if(TextUtils.isEmpty(datalocacao.getText())){
            Toast.makeText(this,"Entre com a data de locação",Toast.LENGTH_LONG).show();
            datalocacao.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(datadevolucao.getText())){
            Toast.makeText(this,"Entre com a data de devolução",Toast.LENGTH_LONG).show();
            datadevolucao.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(quilometragem.getText())){
            Toast.makeText(this,"Entre com a quilometragem",Toast.LENGTH_LONG).show();
            quilometragem.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(cpfpessoa.getText())){
            Toast.makeText(this,"Entre com o CPF",Toast.LENGTH_LONG).show();
            cpfpessoa.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(placaveiculo.getText())){
            Toast.makeText(this,"Entre com a placa do veículo",Toast.LENGTH_LONG).show();
            placaveiculo.requestFocus();
            return false;
        }

        return true;
    }

    public void CancelarLocacao(View view){ finish();}

    public void buttonSalvarLocacao(View view){
        if (valida()){
            if (locacao==null) locacao = new Locacao();
            locacao.setdatalocacao(datalocacao.getText()+"");
            locacao.setdatadevolucao(datadevolucao.getText()+"");
            locacao.setQuilometragem(Float.parseFloat(quilometragem.getText()+""));
            locacao.setcpfpessoa(cpfpessoa.getText()+"");
            locacao.setplacaveiculo(placaveiculo.getText()+"");
            locacao.setativolocacao(ativolocacao.isChecked());
            inserirlocacao();
            finish();

        }

    }
    
    private SQLiteDatabase conexion;
    private Banco bd;
    private void inserirlocacao(){
        bd = new Banco(this);

        String sql= "INSERT INTO LOCACAO(DATALOCACAO,DATADEVOLUCAO,QUILOMETRAGEM,CPFPESSOA,PLACAVEICULO, ATIVO )VALUES('"+locacao.getdatalocacao()+"'," +
                "'"+locacao.getdatadevolucao()+"',"+locacao.getQuilometragem()+"',"+locacao.getcpfpessoa()+"',"+locacao.getplacaveiculo()+"',"+locacao.getativolocacao()+")";
        try {
            conexion = bd.getWritableDatabase();
            ContentValues values= new ContentValues();
            values.put("DATALOCACAO",locacao.getdatalocacao());
            values.put("DATADEVOLUCAO",locacao.getdatadevolucao());
            values.put("QUILOMETRAGEM",locacao.getQuilometragem());
            values.put("CPFPESSOA",locacao.getcpfpessoa());
            values.put("PLACAVEICULO",locacao.getplacaveiculo());
            values.put("ATIVOLOCACAO",locacao.getativolocacao());

            if(locacao.getId()<=0)
                conexion.insertOrThrow("locacao",null,values);
            else
                conexion.update("locacao",values,"ID=?",new String[]{locacao.getId()+""});
            conexion.close();
            Toast.makeText(this, "Sucesso",Toast.LENGTH_LONG).show();
        }catch (SQLException ex){
            Toast.makeText(this, "Erro na inserção!", Toast.LENGTH_SHORT).show();
        }
    }


}
