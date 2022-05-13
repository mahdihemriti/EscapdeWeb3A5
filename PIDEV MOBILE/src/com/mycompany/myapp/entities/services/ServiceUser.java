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
import com.mycompany.myapp.entities.SessionManager;
import com.mycompany.myapp.entities.User;

import com.mycompany.myapp.utils.Statics;
import java.io.IOException;
import java.util.Date;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author SIHEM
 */
public class ServiceUser {

    public ArrayList<User> users;
    
    public static ServiceUser instance=null;
    public boolean resultOK;
    private ConnectionRequest req;
    public ServiceUser() {
         req = new ConnectionRequest();
    }

    public static ServiceUser getInstance() {
        if (instance == null) {
            instance = new ServiceUser();
        }
        return instance;
    }
    


    public ArrayList<User> parseUsers(String jsonText){
                try {
                    char firstChar = jsonText.charAt(0);
                    if(firstChar != '[')
                    {
                    jsonText="["+jsonText+"]";
                    }
                    System.out.println(jsonText);
            users=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
            for(Map<String,Object> obj : list){
                
                User a = new User();
                float id = Float.parseFloat(obj.get("id").toString());
                SessionManager.setId((int) id);
                SessionManager.setNom(obj.get("nom").toString());
                SessionManager.setPrenom(obj.get("prenom").toString());
                SessionManager.setEmail(obj.get("email").toString());
                                try {  
                            Date date1=new SimpleDateFormat("yyyy-MM-dd").parse(obj.get("datedenaissance").toString());
                                    System.out.println(date1);
                SessionManager.setDatenaiss(date1.toString());

                        } catch (ParseException ex) {
                            System.out.println(ex);
                        }

                SessionManager.setNumtel(obj.get("numtel").toString());
                SessionManager.setVille(obj.get("ville").toString());
                SessionManager.setImage(obj.get("image").toString());
                System.out.println("Current user : "+SessionManager.getEmail());
                //  a.setEmail(obj.get("email").toString());
               // a.setUsername(obj.get("username").toString());

                users.add(a);

            }
        } catch (IOException ex) {
            
        }
        return users;
    }
    public ArrayList<User> getAllUsers(){
        String url = Statics.BASE_URL+"utilisateur/allUsersMobile";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new com.codename1.ui.events.ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                users = parseUsers(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        com.codename1.io.NetworkManager.getInstance().addToQueueAndWait(req);
        return users;
    }

    public ArrayList<User> getUser(int id){
        String url = Statics.BASE_URL+"utilisateur/findusermob/?id="+id;
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new com.codename1.ui.events.ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                users = parseUsers(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        com.codename1.io.NetworkManager.getInstance().addToQueueAndWait(req);
        return users;
    }
    public ArrayList<User> Login(String username,String pwd){
        users =null;
        String url = Statics.BASE_URL+"utilisateur/loginmobile?email="+username+"&pwd="+pwd;
        System.out.println(url);
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new com.codename1.ui.events.ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                users = parseUsers(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        com.codename1.io.NetworkManager.getInstance().addToQueueAndWait(req);
        return users;
    }

    public boolean addUser(User u) {
        String url = Statics.BASE_URL + "utilisateur/inscriptionmobile/new?nom="+u.getNom()+"&prenom=" + u.getPrenom()+"&email=" + u.getEmail()+"&datenaiss=" + u.getDatenaiss()+"&numtel=" + u.getNumtel()+"&ville=" + u.getVille()+"&mdp=" + u.getMdp()+ "&image="+ u.getImage(); //création de l'URL
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

        public boolean editUser(User u) {
        String url = Statics.BASE_URL + "usermob/edit?id="+u.getId()+"&email="+u.getNom()+"&prenom=" + u.getPrenom()+"&email=" + u.getEmail()+"&datenaiss=" + u.getDatenaiss()+"&numtel=" + u.getNumtel()+"&ville=" + u.getVille()+"&mdp=" + u.getMdp()+ "&image="+ u.getImage(); //création de l'URL
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

    public boolean deleteUser(User fi) {
        String url = Statics.BASE_URL + "User/del?id=" + fi.getId();
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

    public ArrayList<User> getUserByEmaail(String email){
        String url = Statics.BASE_URL+"/findusermobEmail?email="+email;
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new com.codename1.ui.events.ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                users = parseUsers(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        com.codename1.io.NetworkManager.getInstance().addToQueueAndWait(req);
        return users;
    }        
}
