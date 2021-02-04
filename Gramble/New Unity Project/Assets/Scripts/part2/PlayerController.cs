using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using Mirror;

[RequireComponent(typeof(PlayerTankMovement))]
public class PlayerController : NetworkBehaviour
{
    [SerializeField] private float _horizontalInput = 0;
    [SerializeField] private float _verticalInput = 0;
    [SerializeField] private Vector3 _mousePosition;
    public Transform tankBody;
    public Transform tankTurret;
    PlayerTankMovement movementScript;
    // Start is called before the first frame update


    void Start()
    {
        movementScript = GetComponent<PlayerTankMovement>();

    }


    // Update is called once per frame
    void FixedUpdate()
    {
        if (!isLocalPlayer)
            return;

        GetPlayerInput();
        movementScript.RotateTankTurret(_mousePosition);

        movementScript.MovePlayer(Mathf.Abs(_verticalInput));
        if (_horizontalInput != 0)
            movementScript.RotateTankBody(_horizontalInput);
    }

    private void GetPlayerInput()
    {
        _horizontalInput = Input.GetAxisRaw("Horizontal");
        _verticalInput = Input.GetAxisRaw("Vertical");
        Vector3 mousePosition3d = Camera.main.ScreenToWorldPoint(new Vector3(Input.mousePosition.x, Input.mousePosition.y, Camera.main.nearClipPlane));
        _mousePosition = new Vector3(mousePosition3d.x, mousePosition3d.y, 0);
    }
}

