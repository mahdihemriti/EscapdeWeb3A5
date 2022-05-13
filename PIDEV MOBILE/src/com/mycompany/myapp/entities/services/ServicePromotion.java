/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.entities.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.l10n.ParseException;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.messaging.Message;
import com.codename1.ui.events.ActionListener;
import com.mycompany.myapp.entities.Promotion;
import com.mycompany.myapp.entities.Promotion;

import com.mycompany.myapp.utils.Statics;
import java.io.IOException;
import java.util.Date;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author msi
 */
public class ServicePromotion {

    public ArrayList<Promotion> promotions;
    
    public static ServicePromotion instance=null;
    public boolean resultOK;
    private ConnectionRequest req;
    public ServicePromotion() {
         req = new ConnectionRequest();
    }

    public static ServicePromotion getInstance() {
        if (instance == null) {
            instance = new ServicePromotion();
        }
        return instance;
    }
    


    public ArrayList<Promotion> parsePromotions(String jsonText){
                try {

                    System.out.println(jsonText);
            promotions=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
            for(Map<String,Object> obj : list){
                Promotion a = new Promotion();
                                
                float id = Float.parseFloat(obj.get("id").toString());
                a.setId((int) id);
                a.setTaux(Float.parseFloat(obj.get("taux").toString()));
                
                
                try {  
                            Date date1=new SimpleDateFormat("yyyy-MM-dd").parse(obj.get("datedebut").toString());
                            Date date2=new SimpleDateFormat("yyyy-MM-dd").parse(obj.get("datefin").toString());
                           a.setDatedebut(date1);
                           a.setDatefin(date2);

                        } catch (ParseException ex) {
                            System.out.println(ex);
                        }
                               
                promotions.add(a);


            }
        } catch (IOException ex) {
            
        }
        return promotions;
    }
    public ArrayList<Promotion> getAllPromotions(){
        String url = Statics.BASE_URL+"promotion/mobile/aff";
        req.setUrl(url);
        req.addResponseListener(new com.codename1.ui.events.ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                promotions = parsePromotions(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        com.codename1.io.NetworkManager.getInstance().addToQueueAndWait(req);
        return promotions;
    }


    public boolean addPromotion(Promotion u) {
        String url = Statics.BASE_URL + "promotion/mobile/new?taux="+u.getTaux()+"&datedeb="+u.getDatedebut()+"&datefin="+u.getDatefin();//création de l'URL
               req.setUrl(url);
               System.out.println(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

        public boolean editPromotion(Promotion u) {
        String url = Statics.BASE_URL + "promotion/mobile/editpromo?id="+u.getId()+"&taux="+u.getTaux()+"&datedeb="+u.getDatedebut()+"&datefin="+u.getDatefin();//création de l'URL
               req.setUrl(url);
               System.out.println(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

    public boolean deletePromotion(int id) {
        String url = Statics.BASE_URL + "promotion/mobile/del?id=" + id;
               req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

}
