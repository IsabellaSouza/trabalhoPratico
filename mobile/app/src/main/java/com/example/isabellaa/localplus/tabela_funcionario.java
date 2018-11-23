package com.example.isabellaa.localplus;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class tabela_funcionario extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tabela_funcionario);
    }


    public void NovoFuncionario(View view){
        Intent it = new Intent(this,cadastro_funcionario.class);
        startActivity(it);
    }

    public void SairFuncionario(View view){

finish();
    }
}
