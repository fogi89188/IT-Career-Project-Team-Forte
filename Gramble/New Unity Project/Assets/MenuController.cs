using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using Mirror;
using UnityEngine.SceneManagement;
using System.Net;
using System.Net.Sockets;

public class MenuController : MonoBehaviour
{
    [SerializeField] private string VersioName = "0.1";
    [SerializeField] private GameObject UsernameMenu;
    [SerializeField] private GameObject ConnectPanel;
    public CustomNetworkManager netManager = new CustomNetworkManager();

    [SerializeField] private GameObject StartButton;
    public InputField UsernameField;
    public InputField CreateRoomNameField;
    public InputField JoinRoomNameField;
    private string username = "";
    public string roomName = "";
    private bool alreadyStarted = false;
    private bool creatingGame = false;
    private bool joiningGame = false;

    private void Start()
    {
        UsernameMenu.SetActive(true);
    }

    public void ChangeUserNamelnput()
    {
        if(UsernameField.text.Length >= 1)
        {
            StartButton.SetActive(true);
        }
        else
        {
            StartButton.SetActive(false);
        }
    }

    public void SetUserName()
    {
        username = UsernameField.text;
        UsernameMenu.SetActive(false);
    }

    public void CreateGame()
    {
        if (CreateRoomNameField.text != null && CreateRoomNameField.text != "")
        {
            roomName = CreateRoomNameField.text;
            string ip = new WebClient().DownloadString("http://icanhazip.com");
            ip = ip.TrimEnd('\r', '\n');
            Debug.Log(ip);
            //TODO ADD DATABASE WITH THE OPEN GAME NAMES
            netManager.networkAddress = ip;
            netManager.creatingOrJoining = 0;
            SceneManager.LoadScene("MainGame");
        }
    }

    public void JoinGame()
    {
        roomName = JoinRoomNameField.text;
        //string ip = GET FROM DATABASE BASED ON JOINROOMNAMEFIELD
        //ip = ip.TrimEnd('\r', '\n');
        //TODO ADD DATABASE WITH THE OPEN GAME NAMES

        //temporary using ip instead of room name until the databse gets implemented
        string ip = roomName;
        netManager.networkAddress = ip;
        netManager.creatingOrJoining = 1;
        SceneManager.LoadScene("MainGame");
    }

    void Update()
    {

    }
}

