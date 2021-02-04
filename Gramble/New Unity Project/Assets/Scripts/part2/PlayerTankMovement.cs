﻿using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using Mirror;
using System;

[RequireComponent(typeof(Rigidbody2D))]
public class PlayerTankMovement : NetworkBehaviour
{

    public int movementSpeed = 0;
    public int rotationSpeedTank = 0;
    public int rotationSpeedTurret = 0;

    public Transform tankBody;
    public Transform tankTurret;
    Rigidbody2D rb2d;

    public Rigidbody2D rb;
    public Animator anim;
    public GameObject PlayerCamera;
    public SpriteRenderer sr;
    public bool IsGrounded = false;
    public float MoveSpeed;
    public float DumpForce;




    // Start is called before the first frame update
    void Start()
    {
        rb2d = GetComponent<Rigidbody2D>();
    }

    public void MovePlayer(float inputValue)
    {
        rb2d.velocity = tankBody.right * inputValue * movementSpeed;
    }

    public void RotateTankTurret(Vector3 endpoint)
    {
        Quaternion desiredRotation = Quaternion.LookRotation(Vector3.forward, endpoint - tankTurret.position);
        desiredRotation = Quaternion.Euler(0, 0, desiredRotation.eulerAngles.z + 90);
        tankTurret.rotation = Quaternion.RotateTowards(tankTurret.rotation, desiredRotation, rotationSpeedTurret * Time.deltaTime);
    }


    public void RotateTankBody(float inputDirection)
    {
        float rotation = -inputDirection * rotationSpeedTank;
        tankBody.Rotate(Vector3.forward * rotation);
    }

    public override void OnStartLocalPlayer()
    {
        Camera.main.GetComponent<ClientCameraFollow>().setTarget(gameObject.transform);
    }
}
